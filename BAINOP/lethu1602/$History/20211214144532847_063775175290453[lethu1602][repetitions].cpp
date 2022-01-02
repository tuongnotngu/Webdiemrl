#include<bits/stdc++.h>
using namespace std;
unsigned long int n,ans,d=0;
string s;
int main(){
	freopen("repetitions.inp","r",stdin);
	freopen("repetitions.out","w",stdout);
getline(cin,s);
n=s.size();
int ans=1;

for(int i=1;i<n;i++)
{
	if(s[i]==s[i+1]) d++;
	else
	{

		if(d>ans) ans=d;
		d=1;
	}
}
cout<<ans;
}

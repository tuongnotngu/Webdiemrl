#include<bits/stdc++.h>
using namespace std;
long long int dem,ans;
string s;
int main()
{
	freopen("repetitions.inp","r",stdin);
	freopen("repetitions.out","w",stdout);
	cin>>s;
	dem=0;
	for(int i=0;i<s.size();i++)
	{
		if(s[i]==s[i+1])dem=dem+1;
		else
		{
			ans=max(dem,ans);
			dem=1;
		}
	}
	cout<<ans;
}

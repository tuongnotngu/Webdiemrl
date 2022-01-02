#include<bits/stdc++.h>
using namespace std;
long long int i,n,ans,dem;
string s;
int main()
{
	freopen("Repetitions.inp","r",stdin);
	freopen("Repetitions.out","w",stdout);
	cin>>s; dem=1; ans=0;
	for (i=0;i<s.size();i++)
	{
		if (s[i]==s[i+1]) dem++;
		else
		{
			ans=max(dem,ans);
			dem=1;
		}
	}
	cout<<ans;
}
